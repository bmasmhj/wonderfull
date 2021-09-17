import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import Menu from './Menu';
import Footer from './Footer';

import { BrowserRouter } from 'react-router-dom';
import reportWebVitals from './reportWebVitals';

ReactDOM.render(
    <>
    <BrowserRouter>
    <Menu />
    <App/>
    </BrowserRouter>
    <Footer />

    </>
, document.getElementById('root')
);

reportWebVitals();
