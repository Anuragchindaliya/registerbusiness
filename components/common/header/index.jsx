import React from 'react'
import Link from "next/link";
import Head from "next/head"
const Header = () => {
    return (
        <div>
            <Head>
                <title>ListMeOn</title>
            </Head>
            <nav className="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div className="container">
                    <Link href="/">
                        <a className="navbar-brand">Listmeon</a>
                    </Link>
                    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon" />
                    </button>
                    <div className="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                        <ul className="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li className="nav-item">
                                <Link href="/home">
                                    <a className="nav-link active" aria-current="page">Home</a>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link active" aria-current="page" target="_blank" rel="noopener noreferrer" href="tel:+91-">Call Now</a>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link" target="_blank" rel="noopener noreferrer" href="https://wa.me/91">Whatsapp Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    )
}

export default Header
