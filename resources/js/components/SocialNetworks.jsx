import { Component } from "react";

class SocialNetworks extends Component
{
    render()
    {
        return(
            <div id="social-buttons">
                <div className="container">
                    <div className="row py-4 d-flex align-items-center">

                        <div className="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <p className="mb-0">Nossas redes sociais</p>
                        </div>

                        <div className="col-md-6 col-lg-7 text-center text-md-right">
                            <a href="https://www.facebook.com/" target="_blank">
                                <i className="bi bi-facebook mr-4"> </i>
                            </a>
                            <a href="https://twitter.com/" target="_blank">
                                <i className="bi bi-twitter mr-4"> </i>
                            </a>
                            <a href="https://linkedin.com/" target="_blank">
                                <i className="bi bi-linkedin mr-4"> </i>
                            </a>
                            <a href="https://instagram.com/" target="_blank">
                                <i className="bi bi-instagram mr-lg-4"> </i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        );
    }
}

export default SocialNetworks;