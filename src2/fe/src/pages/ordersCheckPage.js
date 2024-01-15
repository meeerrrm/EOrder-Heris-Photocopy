import React, { Component } from 'react';

import Header from "parts/Header";
import { Footer } from 'parts/Footer';
import OrdersCheck from 'parts/ordersCheck';
export default class OrderCheck extends Component{
    render(){
        return (
            <>
                <Header {...this.props}></Header>
                <OrdersCheck {...this.props}></OrdersCheck>
                <Footer {...this.props}></Footer>
            </>
        );
    }
}