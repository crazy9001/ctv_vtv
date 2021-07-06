import styled from 'styled-components'

export const LiveTemplateWrapper = styled.div`
    height: calc(100vh - 177px);
    background-color: #fff;
    display: flex;
`
export const ItemSettingsStyled = styled.div`
    width: 300px;
    display: inline-block;
    margin-top: 0;
    background: #fff;
    z-index: 9999999;
    border-right: solid 1px #ddd;
`

export const LiveBrowseSettingBlockStyled = styled.div`
    form {
        margin: 0
    }
`

export const LiveBrowseSettingBlockHeader = styled.div`
    height: 29px;
    background: #252525;
    color: #b1b1b1;
    text-transform: uppercase;
    font-size: 11px;
    cursor: pointer;
    position: relative;
`

export const LiveBrowseHeaderTitle = styled.span`
    margin-top: 7px;
    display: inline-block;
    margin-left: 12px;
    font-weight: 700
`

export const SENewsSearchWrapper = styled.div`
    padding: 5px;
    border-bottom: 1px solid #ddd;
`
export const SESearchNewsPublishedStyled = styled.input`
    border: 1px solid #ddd;
    border-radius: 2px;
    color: #333;
    font-size: 11px!important;
    height: 22px;
    opacity: .5;
    padding: 0 5px;
    width: 270px;
    transition: opacity .25s ease-in-out;
    outline: none;
    margin-bottom: 0
`
export const ButtonSearchPost = styled.button`
    display: none
`

export const SENewsPublishedSearchByZoneWrapper = styled.div`
    display: inline-block;
`

export const SENewsSearchLabel = styled.label`
    color: #333;
    display: inline-block;
    font-size: 10px;
    text-transform: uppercase;
    width: 80px;
    float: left;
    margin-top: 13px;
    margin-left: 2px;
`

export const SENewsSearchSelectWrapper = styled.div`
    display: inline-block;
    margin-top: 5px;
    select {
        width: 188px;
        border: 1px solid #ccc;
        padding: 3px;
        font-size: 12px;
        outline: none;
        margin-bottom: 0;
        margin-top: 0
    }
`
export const NewsPositionHot = styled.div`
    height: calc(100vh - 307px);
    max-height: calc(100vh - 370px);
`

export const SENewsItem = styled.div`
    cursor: move;
    background: #fff;
    height: 100%;
    margin-top: 0;
`
export const SENewsItemContent = styled.div`
    border-bottom: 1px solid #ddd;
    display: flex;
    flex-wrap: wrap;
    padding: 5px;

    img {
        width: 20%;
        -webkit-box-flex: 1;
        flex-grow: 1;
    }
`

export const SENewsItemInfo = styled.div`
    color: #333;
    font-size: 11px;
    width: 180px;

    .SENewsItemTitle{
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        width: 175px;
        max-height: 37px;
        overflow: hidden;
        -webkit-box-flex: 1;
        flex-grow: 1;
        margin: 0 5px;
     }


    .SENewsItemCreatedBy {
        margin-bottom: 2px;
        margin-left: 5px;
        width: 170px;
        display: inline-block;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .SENewsItemViewCount {
        color: #333;
        display: inline-block;
        font-weight: 700;
        margin-left: 5px;
        width: 165px;
    }
`


