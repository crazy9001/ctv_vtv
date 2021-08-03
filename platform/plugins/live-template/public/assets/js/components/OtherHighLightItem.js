import React from "react";
import {DropTarget} from "react-dnd";

const OtherHighLightItem = (props) => {
    const {isOver, canDrop, connectDropTarget, droppedItem} = props;
    return connectDropTarget(
        <div className=" col-xl-3 col-lg-4 col-md-6 p-lg-2 p-xl-0 flex-column item-new-ps ">
            <div className="bg-img h-100">
                <div className="d-flex align-items-center justify-content-center">
                    <a href="#">
                        <img src={droppedItem.image || ''} className="img-fluid"/>
                    </a>
                </div>
                <div className="time-item-ps d-flex flex-row align-items-center">
                    <i className="far fa-calendar-alt"
                       style={{color: '#666666', width: '17px', height: '16px'}}/>
                    <span className="ml-2">27/03/2021 - 15:30:17</span>
                </div>
                <div className="content-new-item" title={droppedItem.name || ''}>
                    <h3>{droppedItem.name || ''}</h3>
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

export default DropTarget("SOURCE", spec, collect)(OtherHighLightItem);

