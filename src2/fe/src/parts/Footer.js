import React from 'react'

export const Footer = (props) => {
    return(
        <footer className="w-full border-t-2 border-slate-500 py-4 bg-slate-600">
            <p className="text-center text-white">©Heris Fotocopy - {new Date().getFullYear()}</p>
        </footer>
    )
}