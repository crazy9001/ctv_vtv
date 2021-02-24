import React, { useState, useEffect } from 'react'
import { API_GET_POST, API_SEARCH_POST } from './../config/const'
import InfiniteScroll from "react-infinite-scroll-component";

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
    ButtonSearchPost
} from './../styled/index'
import PostItem from "./PostItem";

const PostList = ({ props }) => {

    const [dataPost, setDataPost] = useState([])
    const [nextPage, setNexPage] = useState(API_GET_POST)
    const [hasMore, setHasmore] = useState(true)
    const [searchTerm, setSearchTerm] = useState('')

    useEffect(() => {
        fetchPostData();
    }, [])

    const fetchPostData = () => {
        if (hasMore) {
            axios.get(nextPage)
                .then(res => {
                    if (!res.data.error) {
                        const { links, data } = res.data
                        if (data.length) {
                            setDataPost([...dataPost, ...data]);
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

    const handleChangeSearchInput = event => {
        setSearchTerm(event.target.value);
    };

    const handleSubmitSearch = event => {
        event.preventDefault();
        axios.get(API_SEARCH_POST + `?q=${searchTerm}`)
            .then(res => {
                if (!res.data.error) {
                    setDataPost(res.data.data)
                }
            })
            .catch(err => {
                Botble.handleError(err.response.data);
            })
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
                                                placeholder={`Từ khóa`}
                                                value={searchTerm}
                                                onChange={handleChangeSearchInput}
                                            />
                                            <ButtonSearchPost />
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
                                <NewsPositionHot id="scrollableDiv" style={{ overflowY: "scroll" }}>
                                    <InfiniteScroll
                                        dataLength={dataPost.length}
                                        next={fetchPostData}
                                        hasMore={hasMore}
                                        loader={<span>Loading...</span>}
                                        scrollableTarget="scrollableDiv"
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
