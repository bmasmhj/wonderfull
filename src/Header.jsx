import React from "react";

const Header = () => {
    return <> 
     <header id="header" className="masthead d-flex p-0">
     <div className="container my-auto">
         <div className="row">
            <div className="col-md-8 order-md-2 ">
                <img src="./assets/img/finance.jpg" style={{width: "100%" }} alt="" />
             </div>
             <div className="col-md-4 d-flex flex-column justify-content-center align-items-center">
             <h4>Wonderful Multipurpose Co-Operative Society</h4>
      <span><q>It's not about how much money you make it's how you save it</q></span>

      <a  className="mt-4 btn border btn-sm btn-xl js-scroll-trigger" role="button" href="#about"><i className="fas fa-angle-down"></i> Explore More <i className="fas fa-angle-down"></i></a>
             </div>
             
         </div>
     
    </div>

    </header>
    </>;
   
};
export default Header;