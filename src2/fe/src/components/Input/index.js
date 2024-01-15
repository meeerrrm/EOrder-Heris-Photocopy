import React from 'react'

import { Link } from 'react-router-dom'
import propTypes from 'prop-types'

export default function Input(props) {
    const className = props.className;
    className.push("gap-2.5 px-[18px] py-2.5 rounded-[5px] bg-white border border-[#384150]");
    return(
        <input 
            name={props.name}
            placeholder={props.placeholder}
            className={props.className}
            type="text"
        />
    )
}

Button.propTypes = {
    type: propTypes.oneOf(["text","file","textarea","select"]),
    onClick: propTypes.func,
    name: propTypes.string,
    target: propTypes.string,
    className: propTypes.string,
    placeholder: propTypes.string,
    isDisabled: propTypes.bool,
    isLoading: propTypes.bool,
}