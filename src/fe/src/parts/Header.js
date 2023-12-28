import React from 'react'

import Button from "components/Button";
import BrandIcon from "parts/iconText";

export default function Header(props) {


    const getNavLinkClass = (path) =>{
        return window.location.pathname === path ? '' : '';
    }
  return (
    <header className=''>
        <nav className="w-full shadow py-4">
            <div class="max-w-6xl mx-auto flex flex-wrap">
                <div className='md:w-1/3'>
                    <BrandIcon />
                </div>
                <div class="flex flex-wrap ml-auto">
                    <Button type='link' className={` ${getNavLinkClass('/')}`} href='/'>Beranda</Button>
                    <Button type='link' className={` ${getNavLinkClass('/order')}`} href='/order'>Order</Button>
                    <Button type='link' className={` ${getNavLinkClass('/orders-check')}`} href='/orders-check'>Check</Button>
                    </div>
            </div>
        </nav>
    </header>
  )
}
