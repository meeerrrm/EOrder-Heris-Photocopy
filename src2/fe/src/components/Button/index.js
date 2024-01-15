import React from 'react'

import { Link } from 'react-router-dom'
import propTypes from 'prop-types'

export default function Button(props) {
    const className = [props.className]
    className.push("mx-2 px-4 transition-all hover:text-sky-400 hover:border-b-2");

    const onClick = () =>{
        if(props.onClick) props.onClick()
    }

    if(props.isDisabled || props.isLoading){
        if(props.isDisabled) className.push("disabled");
        return (
            <span
            href={props.href} 
            className={className.join(" ")} 
            >
               {
                props.isLoading ? (
                <>
                    <span className="sr-only">Loading ...</span> 
                </>
                ):(
                    props.children
                )
               }
           </span>
        )
    }

    if(props.type === "link"){
        if(props.isExternal){
            return(
                <a
                 href={props.href} 
                 className={className.join(" ")} 
                 target={props.target === "_blank" ?"_blank": undefined} 
                 rel={props.target === "_blank" ?"noopener noreferrer": undefined}
                 >
                    {props.children}
                </a>
            )
        }else{
            return(
                <Link
                 href={props.href} 
                 className={className.join(" ")}
                 onClick={onClick}
                 >
                    {props.children}
                </Link>
            )
        }
    }

    return (
        <button
         href={props.href} 
         className={className.join(" ")}
         onClick={onClick}
         >
            {props.children}
        </button>
    );
}

Button.propTypes = {
    type: propTypes.oneOf(["button","link"]),
    onClick: propTypes.func,
    href: propTypes.string,
    target: propTypes.string,
    className: propTypes.string,
    isDisabled: propTypes.bool,
    isLoading: propTypes.bool,
    isExternal: propTypes.bool,
}
