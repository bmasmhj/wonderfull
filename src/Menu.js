
import React from "react";
import { NavLink , Link } from "react-router-dom";
const Menu = () => {
  return ( <>
    <nav  className="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div className="container">
          <Link to="/"><img src="assets/img/favicon.png" width="50" className="nav-img" alt=""/></Link>
            <Link className="navbar-brand  js-scroll-trigger" to="/"> Wonderful Multipurpose <br/> Co-operative Society Ltd.</Link>
          <button data-toggle="collapse" data-target="#navbarResponsive" className="btn btn-outline-white navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <i className="fas fa-bars" id="btn"></i>

          </button>
            <div className="collapse navbar-collapse" id="navbarResponsive">
                <ul className="nav navbar-nav ml-auto">
                    <li className="nav-item" role="presentation"><NavLink activeClassName="text-active" className="nav-link text-black js-scroll-trigger" to="Home">Home</NavLink></li>
                    <li className="nav-item" role="presentation"><NavLink activeClassName="text-active" className="nav-link text-black js-scroll-trigger " to="Service"> Services</NavLink></li>
                    <li className="nav-item" role="presentation"><NavLink activeClassName="text-active" className="nav-link text-black js-scroll-trigger " to="intrestrate"> Intrest Rate</NavLink></li>
                    <li className="nav-item" role="presentation"><NavLink activeClassName="text-active" className="nav-link text-black js-scroll-trigger " to="board"> Board Member</NavLink></li>
                    <li className="nav-item" role="presentation"><NavLink activeClassName="text-active" className="nav-link text-black js-scroll-trigger  " to="contact">Contact</NavLink></li>
                </ul>
            </div>
        </div>
    </nav>
    <div className="space-up"></div>
    </>
  );
}

export default Menu;
