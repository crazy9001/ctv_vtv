import React, {useState, useEffect, useRef} from 'react'
import {Scrollbars} from "react-custom-scrollbars";
import {API_URL} from './../config/const'

import {
    ItemSettingsStyled,
    LiveBrowseSettingBlockStyled,
    LiveBrowseSettingBlockHeader,
    LiveBrowseHeaderTitle,
    SENewsSearchWrapper,
    SESearchNewsPublishedStyled,
    SENewsPublishedSearchByZoneWrapper,
    SENewsSearchLabel,
    SENewsSearchSelectWrapper,
    NewsPositionHot,
} from './../styled/index'
import PostItem from "./PostItem";


const renderThumb = ({style, ...props}) => {
    const thumbStyle = {
        backgroundColor: '#333',
        height: '50px',
        width: '10px'
    };
    return (
        <div
            style={{...style, ...thumbStyle}}
            {...props}/>
    );
}


const PostList = (props) => {

    let scrollNode = useRef(null);

    const [dataPost, setDataPost] = useState([])

    useEffect(() => {
        axios.get(API_URL + '/api/v1/posts')
            .then(res => {
                if (!res.data.error) {
                    setDataPost(res.data.data)
                }
            })
            .catch(res => {
                Botble.handleError(res.response.data);
            })
    }, [])

    const handleUpdateScrollBar = (values) => {
        const { scrollTop, scrollHeight, clientHeight } = values;
        const pad = 100; // 100px of the bottom

        const t = ((scrollTop + pad) / (scrollHeight - clientHeight));
        if (t > 1) {
            console.log('scroll to bottom')
        }
    }

    return (
        <ItemSettingsStyled>
            <div id="LiveBrowseItemSettingsContent">
                <LiveBrowseSettingBlockStyled>
                    <LiveBrowseSettingBlockHeader>
                        <LiveBrowseHeaderTitle>Danh sách tin</LiveBrowseHeaderTitle>
                    </LiveBrowseSettingBlockHeader>
                    <div className="LiveBrowseSettingBlockContent">
                        <div id="LiveBrowseNewsList">
                            <div id="LiveBrowseNewsListTabs">
                                <div id="NewsListTab">
                                    <SENewsSearchWrapper>
                                        <form>
                                            <SESearchNewsPublishedStyled
                                                placeholder={`Từ khóa`}
                                            />
                                        </form>
                                        <SENewsPublishedSearchByZoneWrapper>
                                            <SENewsSearchLabel>Chuyên mục</SENewsSearchLabel>
                                            <SENewsSearchSelectWrapper>
                                                <select
                                                    id="SENewsSearchNewsPublishedZone"
                                                    name="primary_category"
                                                >
                                                    <option value="">
                                                        Chuyên mục
                                                    </option>
                                                </select>
                                            </SENewsSearchSelectWrapper>
                                        </SENewsPublishedSearchByZoneWrapper>
                                    </SENewsSearchWrapper>
                                </div>
                                <NewsPositionHot>
                                    <Scrollbars
                                        renderThumbVertical={renderThumb}
                                        autoHide
                                        onUpdate={handleUpdateScrollBar}
                                    >
                                        {
                                            dataPost && dataPost.length ? dataPost.map((post, index) => {
                                                return (
                                                    <PostItem
                                                        key={index}
                                                        post={post}
                                                    />
                                                )
                                            }) : null
                                        }
                                    </Scrollbars>
                                </NewsPositionHot>
                            </div>
                        </div>
                    </div>
                </LiveBrowseSettingBlockStyled>
            </div>
        </ItemSettingsStyled>
    )
}

export default React.memo(PostList)
