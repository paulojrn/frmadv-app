import React, { Component } from "react";

class Navbar extends Component
{
    render()
    {
        return(
            <nav className="navbar navbar-expand-lg navbar-expand-md navbar-light fixed-top">
                <div className="container">
                    <a className="navbar-brand" href="/">
                        <img src="img/logo.png" width="120" height="60" alt="Logo" />
                    </a>
                    <button
                        className="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbar-content"
                        aria-controls="navbar-content"
                        aria-expanded="false"
                        aria-label="{{ __('Menu de navegação') }}">

                        <span className="navbar-toggler-icon"></span>
                    </button>

                    <div id="navbar-content" className="collapse navbar-collapse">
                        {/* Left Side Of Navbar */}
                        <ul className="navbar-nav mr-auto">
                            
                        </ul>

                        {/* Right Side Of Navbar */}
                        <ul className="navbar-nav ml-auto">
                            <li className="nav-item">
                                <a className="nav-link" href="#home">Início</a>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link" href="#expertise-area">Áreas de atuação</a>
                            </li>
                            {/* <li className="nav-item">
                                <a class="nav-link" href="#">Sobre</a>
                            </li> */}
                            <li className="nav-item">
                                <a className="nav-link" href="#contact">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        );
    }
}

export default Navbar;