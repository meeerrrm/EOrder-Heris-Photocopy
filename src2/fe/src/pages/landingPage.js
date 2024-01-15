import React, { Component } from 'react';

import Header from "parts/Header";
import Hero from 'parts/Landing';
import { Footer } from 'parts/Footer';
export default class LandingPage extends Component{
    render(){
        return (
            <>
                <Header {...this.props}></Header>
                <Hero {...this.props}></Hero>
                <Footer {...this.props}></Footer>
            </>
        );
    }
}