import React from "react";
import Slider from "./Slider";
import CBanner from "./CBanner";
import About from "./About";
import Corona from "./Corona";
import Header from "./Header";


const Home = () => {
    return (<>
    <Header/>
    <Corona/>
    <div className="container mb-4 mt-2">
    <div className="row">
        <Slider />
        <CBanner />
    </div>
    </div>
        <About />
   

</>
);
}

export default Home;