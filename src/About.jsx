import React, { useEffect } from "react";
import Aos from "aos";
const Service = () => {
    useEffect(() => {
        Aos.init({});
	    Aos.init({ disable : 'mobile' });

    })
    return (

<section id="about">
    <h5 className='section-heading' data-aos="fade-up">About us</h5>
    <hr/>
    <div className="container">
        <div className="row">
            <div className="col-md-4"  data-aos="fade-right">
                <img src="assets/img/bank.jpg" alt="" className="w-100" />
            </div>
            <div className="col-md-8" data-aos="fade-left">
            <p className="about">Wonderful Multipurpose Co-operative Society Ltd. is regester on the Nepal co-operative act <span className="text-info">2048 B.S. on 2063.09.22</span>  . 
            It is managed by banking professionals. 
            The disciplined and loyal incorporates the same values in the co-operative which has earned them an awesome reputation. 
            There is profit but with ethics. Transparency and integrity are not compromised for financial gains.
            </p>
            </div>
        </div>
        <div className="row">
            <div className="col-md-4 order-md-2" data-aos="fade-left"  data-aos-duration="0">
                <img src="assets/img/tech.jpg" alt="" className="w-100" />
            </div>
            <div className="col-md-8"  data-aos="fade-right">
            <p className="about order-md-1">The co-operative has been initiated with the latest innovative tools in banking to give services with a difference. 
            There has been a constant revamping and introduction of market <a className="text-danger" href="service"><u>friendly packages</u></a> for the benefit of the customers.
            Operation and the financial statement are clean and reliable. 
            <a className="text-danger" href="intrestrate"><u>The deposit and lending rates</u></a> are competitive with an unprecedented emphasis on the quality of services. 
            We are constantly enabling our clients achieve their financial goals.
            </p>
            </div>
        </div>
    </div>
</section>

)
    ;
   
};
export default Service;