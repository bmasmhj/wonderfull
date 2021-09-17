import React from 'react';
import { Route, Switch } from 'react-router';
import './index.css';
import Home from './Home';
import Board from './Board';
import Contact from './Contact';
import Intrest from './Intrestrate';


import Error from './Error';
import Service from './Service';
const App = () => {
    return <>
        <Switch>
            <Route exact path='/' component={Home} />
            <Route  path='/home' component={Home} />
            <Route  path='/intrestrate' component={Intrest} />
            <Route  path='/board' component={Board} />
            <Route  path='/contact' component={Contact} />
            <Route path='/service' component={Service} />
            <Route component={Error} />
        </Switch>
    </>;
};

export default App;
