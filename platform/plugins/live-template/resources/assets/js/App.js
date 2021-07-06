import React, {Fragment} from 'react';

import {HTML5Backend} from 'react-dnd-html5-backend';
import {DndProvider} from 'react-dnd';

import {LiveTemplateWrapper} from './styled/index';
import {Scrollbars} from "react-custom-scrollbars";

import PostList from './components/PostList';

const App = () => {

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

    return (
        <DndProvider backend={HTML5Backend}>
            <LiveTemplateWrapper>
                <PostList/>
                <Fragment>
                    <Scrollbars
                        renderThumbVertical={renderThumb}
                        autoHide
                        style={{ width: `250px`}}
                    >

                    </Scrollbars>
                </Fragment>
            </LiveTemplateWrapper>
        </DndProvider>
    )
}

export default App;
