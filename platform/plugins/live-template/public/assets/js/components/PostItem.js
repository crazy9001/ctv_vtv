import React from 'react'
import {DragSource} from "react-dnd";

import {
    SENewsItem,
    SENewsItemContent,
    SENewsItemInfo
} from './../styled'


const PostItem = (props) => {
    const {post, connectDragSource} = props

    return connectDragSource(
        <div>
            <SENewsItem>
                <SENewsItemContent>
                    <img src={post?.image || null} alt={post?.name || ''}/>
                    <SENewsItemInfo>
                        <h3 className="SENewsItemTitle" title={post?.name || ''} >
                            {post?.name || ''}
                        </h3>
                        <span className="SENewsItemCreatedBy" >
                            <span className="fa fa-user-circle"/> { post?.author || '' }
                        </span>
                        <span className="SENewsItemViewCount SEHotNewsViewCount tipsy_handler" title="Chuyên mục" >
                            <span className="fa fa-bookmark"/> {post?.categories[0]?.name || ''}
                        </span>
                    </SENewsItemInfo>
                </SENewsItemContent>
            </SENewsItem>
        </div>
    )
}

function collect(connect, monitor) {
    return {
        connectDragSource: connect.dragSource()
    };
}

const cardSource = {
    beginDrag(props, monitor, component) {
        const item = props.post;
        return item;
    }
};

export default DragSource("SOURCE", cardSource, collect)(PostItem);
