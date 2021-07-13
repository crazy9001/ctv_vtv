import React, {useEffect, useState} from "react";
import OtherHighLightItem from "../components/OtherHighLightItem";
import update from "immutability-helper";
import _some from 'lodash/some';
import {API_FILTER_POST, API_GET_HIGH_LIGHT_CATEGORY} from "../config/const";
import FirstHighLightItem from "../components/FirstHighLightItem";
import { useRecoilValue } from 'recoil';
import {LIVE_TEMPLATE_STATE} from "../atom";

const HighLightBox = ({props}) => {

    const { currentCategoryId } = useRecoilValue(LIVE_TEMPLATE_STATE);

    const [state, setState] = useState({
        posts: []
    })

    useEffect(() => {
        axios.get(API_GET_HIGH_LIGHT_CATEGORY, {
            params: {
                category: currentCategoryId
            }
        })
            .then(res => {
                if (!res.data.error) {
                    setState({
                        ...state,
                        posts: res.data.data
                    })
                }
            })
            .catch(res => {
                Botble.handleError(res.response.data);
            })
    }, [currentCategoryId])

    const onDropItem = (item, index) => {
        if (_some(state.posts, item)) {
            Botble.showError(`Bài viết đã được đánh dấu nổi bật mục`);
        } else {
            let postState = update(state.posts, {
                [index]: {
                    $set: item
                }
            });
            setState({
                ...state,
                posts: [...postState]
            })
        }
    }

    return (
        <section className="section-home">
            <div className="title text-center">
                <h3>Tin tức &amp; Sự Kiện</h3>
                <div className="d-flex flex-row justify-content-center align-items-center">
                    <div className="line"/>
                    <i className="fas fa-book-open" style={{color: '#9a0000'}}/>
                    <div className="line2"/>
                </div>
            </div>
            <div className="container">
                {
                    state.posts.slice(0,1).map((post, index) => {
                        return (
                            <FirstHighLightItem
                                key={index}
                                droppedItem={post}
                                onDrop={item => onDropItem(item, index)}
                            />
                        )
                    })
                }
                <div>
                    <div className="row">
                        {
                            state.posts.slice(1,5).map((post, index) => {
                                return(
                                    <OtherHighLightItem
                                        key={index + 1}
                                        droppedItem={post}
                                        onDrop={item => onDropItem(item, index + 1)}
                                    />
                                )
                            })
                        }
                    </div>
                </div>
            </div>
        </section>
    )
}

export default React.memo(HighLightBox)
