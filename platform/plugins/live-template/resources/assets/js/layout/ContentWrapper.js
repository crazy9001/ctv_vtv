import React from "react";
import FrontEndHeader from './../layout/FrontEndHeader';
import FrontEndContent from './../layout/FrontEndContent';
const ContentWrapper = ({props}) => {
    return (
        <>
            <FrontEndHeader/>
            <FrontEndContent/>
        </>
    )
}

export default React.memo(ContentWrapper)
