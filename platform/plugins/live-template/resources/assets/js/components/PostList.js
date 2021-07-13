import React, {useState, useEffect} from 'react'
import {
    API_GET_POST_PUBLISH,
    API_SEARCH_POST,
    API_GET_HIGH_LIGHT_HOME,
    API_GET_POST_CATEGORIES,
    API_FILTER_POST
} from './../config/const'
import InfiniteScroll from "react-infinite-scroll-component";

import {
    ItemSettingsStyled,
    LiveBrowseSettingBlockStyled,
    LiveBrowseSettingBlockHeader,
    LiveBrowseHeaderTitle,
    SENewsSearchWrapper,
    SESearchNewsPublishedStyled,
    SENewsPublishedSearchByZoneWrapper,
    SENewsSearchSelectWrapper,
    NewsPositionHot,
    ButtonSearchPost
} from './../styled/index'
import PostItem from "./PostItem";

import DropdownContainer from "./Dropdown/DropdownContainer";
import { useRecoilValue, useSetRecoilState } from 'recoil';
import {LIVE_TEMPLATE_STATE} from "../atom";

const PostList = ({props}) => {

    const [postPublished, setPostPublished] = useState([])
    const [nextPage, setNexPage] = useState(API_FILTER_POST)
    const [hasMore, setHasmore] = useState(true)
    const [searchTerm, setSearchTerm] = useState('')

    const [dataCategories, setDataCategories] = useState({})

    const { currentCategoryId } = useRecoilValue(LIVE_TEMPLATE_STATE);
    const setCurrentCategoryId = useSetRecoilState(LIVE_TEMPLATE_STATE);

    //console.log('currentCategoryId', currentCategoryId);

    useEffect(() => {
        fetchPostData();
        getCategories();
    }, [currentCategoryId])

    const getCategories = () => {
        axios.get(API_GET_POST_CATEGORIES)
            .then(res => {
                if (!res.data.error) {
                    const {data} = res;
                    setDataCategories(data.data);
                }
            })
            .catch(res => {
                Botble.handleError(res.response.data);
            });
    }

    const fetchPostData = () => {
        if (hasMore) {
            axios.get(nextPage, {
                params: {
                    categories: [currentCategoryId, 2]
                }
            })
                .then(res => {
                    if (!res.data.error) {
                        const {links, data} = res.data
                        if (data.length) {
                            setPostPublished([...postPublished, ...data]);
                            setNexPage(links.next);
                        }
                        if (!links.next) {
                            setHasmore(false)
                        }
                    }
                })
                .catch(res => {
                    Botble.handleError(res.response.data);
                })
        }
    }

    const getHighLightHome = () => {
        axios.get(API_GET_HIGH_LIGHT_HOME)
            .then(res => {
                //console.log(res);
            })
            .catch(res => {
                Botble.handleError(res.response.data);
            });
    }

    const handleChangeSearchInput = event => {
        setSearchTerm(event.target.value);
    };

    const handleSubmitSearch = event => {
        event.preventDefault();
        axios.get(API_SEARCH_POST + `?q=${searchTerm}`)
            .then(res => {
                if (!res.data.error) {
                    setPostPublished(res.data.data)
                }
            })
            .catch(err => {
                Botble.handleError(err.response.data);
            })
    }

    const onChangeCategory = (currentNode, selectedNodes) => {
        console.log('onChange::', currentNode, selectedNodes)
        setCurrentCategoryId((state) => ({ ...state, currentCategoryId: currentNode.id }));
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
                                        <form onSubmit={handleSubmitSearch}>
                                            <SESearchNewsPublishedStyled
                                                placeholder={`Nhập từ khóa`}
                                                value={searchTerm}
                                                onChange={handleChangeSearchInput}
                                            />
                                            <ButtonSearchPost/>
                                        </form>
                                        <SENewsPublishedSearchByZoneWrapper>
                                            <SENewsSearchSelectWrapper>
                                                <DropdownContainer
                                                    data={dataCategories}
                                                    onChange={onChangeCategory}
                                                />
                                            </SENewsSearchSelectWrapper>
                                        </SENewsPublishedSearchByZoneWrapper>
                                    </SENewsSearchWrapper>
                                </div>
                                <NewsPositionHot id="scrollableDiv" style={{overflowY: "scroll"}}>
                                    <InfiniteScroll
                                        dataLength={postPublished.length}
                                        next={fetchPostData}
                                        hasMore={hasMore}
                                        loader={<span>Loading...</span>}
                                        scrollableTarget="scrollableDiv"
                                    >
                                        {
                                            postPublished && postPublished.length ? postPublished.map((post, index) => {
                                                return (
                                                    <PostItem
                                                        key={index}
                                                        post={post}
                                                    />
                                                )
                                            }) : null
                                        }
                                    </InfiniteScroll>
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
