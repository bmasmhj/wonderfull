import React from "react";

const Corona = () => {
    return ( <>
    <div className="container-fluid" id="notice">
        <div className="row" > 
            <div className="col offset-lg-8 mx-auto text-center mt-3"> 
            <h5 className="text-black text-uppercase safetyheading"> SAFETY FIRST </h5>
            <span className="text-center text-primary safety">
                <i className="fal fa-exclamation-circle text-danger"></i></span>
                <p className="text-black text-center p-4 mb-4">We make everything to ensure the health, 
                safety and well-being of our customer and employees. <br/> 
                Clean hand with soap and water, wear mask wherever you go and 
                maintain distance about 6 FT</p>
            </div> 
        </div>
    </div>
    </> );
   
};
export default Corona;
