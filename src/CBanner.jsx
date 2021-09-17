import React from "react";
import CBannerData from "./json/CBannerdata";

let curDate = new Date();
let curDay = '';
let curDates = '';

let nowstat = '';
const cssStyle = {} ;

curDates = curDate.getHours();
curDay = curDate.getDay();

if(curDates >= 8 && curDates < 17 && curDay<6){
    cssStyle.color = '#28a745';
    nowstat = 'Available';
}else{
    cssStyle.color = '#dc3545';
    nowstat = 'Not Available';
}


function Cbaner(props) {
        const content = props.posts.map((val) =>
        <div key={val.id}>
        <h5 className="mt-3 staatliches">
        {val.post}
            <span className="board-name cotact-name">
           - {val.name}</span>
        </h5>
        <h6 className="ml-5"><a href="tel:{val.contact}"><i className="fas fa-phone-alt"></i> :  {val.contact}</a></h6>
        </div>
        );
        return (
        <div>
            {content}
        </div>
        );
    }

const CBanner = () => {
    return <>  
    <div className="col-md-4 mt-2">
            <div className="card text-primary">
                <div className="card-body">
                    <h4 className=" text-bold text-center staatliches">Contact US</h4>
                    <h6 className="text-center"> SUN - FRI ( 8:00 AM - 5:00 PM ) <br />
                    <span style={cssStyle}>(<i className="far fa-clock"></i> {nowstat})</span> </h6>
                    <Cbaner posts={CBannerData} />,
                </div>
            </div>
        </div>
    </>;
};
export default CBanner;


