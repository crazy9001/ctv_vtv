import React from "react";
import {DropTarget} from "react-dnd";

const FirstHighLightItem = (props) => {
    const {isOver, canDrop, connectDropTarget, droppedItem} = props;
    return connectDropTarget(
        <div className="block-one row shadow-sm bg-white">
            <div className=" d-flex col-lg-6 align-items-center justify-content-center p-lg-2 p-xl-0">
                <a href="#">
                    <img src={droppedItem.image || ''} className="img-fluid" alt={droppedItem.name || ''}/>
                </a>
            </div>
            <div className="col-lg-6 w-100 justify-content-center align-items-center">
                <div className="news-text-title">
                    <h3 title={droppedItem.name || ''}>
                        {droppedItem.name || ''}
                    </h3>
                </div>
                <div className="time-view d-flex flex-row align-items-center">
                    <i className="far fa-calendar-alt"
                       style={{color: '#666666', width: '17px', height: '16px'}}/>
                    <span className="ml-2">27/03/2021 - 15:30:17</span>
                </div>
                <div className="news-content-text">
                      <span>
                        {droppedItem.description || ''}
                      </span>
                </div>
            </div>
        </div>
    )
}

const spec = {
    drop(props, monitor, component) {
        const item = monitor.getItem();
        props.onDrop(item);
    }
};

function collect(connect, monitor) {
    return {
        connectDropTarget: connect.dropTarget(),
        isOver: monitor.isOver(),
        isOverCurrent: monitor.isOver({shallow: true}),
        canDrop: monitor.canDrop()
    };
}

export default DropTarget("SOURCE", spec, collect)(FirstHighLightItem);

