import React, { Component } from "react";

class Caroussel extends Component
{
    render()
    {
        return(
            <div id="home-carousel" className="carousel slide" data-ride="carousel">
                <ol className="carousel-indicators">
                    <li data-target="#home-carousel" data-slide-to="0" className="active"></li>
                    <li data-target="#home-carousel" data-slide-to="1"></li>
                    <li data-target="#home-carousel" data-slide-to="2"></li>
                    <li data-target="#home-carousel" data-slide-to="3"></li>
                </ol>
                <div className="carousel-inner">
                    <div className="carousel-item active">
                        <img className="d-block w-100" src="img/books-1.jpg" alt="Figura 1 - Atendimento" />
                        <div className="carousel-caption">
                            <h3>Atendimento</h3>
                            <p>Realizamos atendimento online ou presencial.</p>
                        </div>
                    </div>
                    <div className="carousel-item">
                        <img className="d-block w-100" src="img/books-2.jpg" alt="Figura 2 - Comunicação" />
                        <div className="carousel-caption">
                            <h3>Comunicação</h3>
                            <p>Priorizamos uma linguagem natural e de fácil compreenção, sem juridiquês.</p>
                        </div>
                    </div>
                    <div className="carousel-item">
                        <img className="d-block w-100" src="img/themis-1.jpg" alt="Figura 3 - Contato" />
                        <div className="carousel-caption">
                            <h3>Contato</h3>
                            <p>Possuímos várias formas de contato, escolha a melhor para você e fale conosco.</p>
                        </div>
                    </div>
                    <div className="carousel-item">
                        <img className="d-block w-100" src="img/themis-2.jpg" alt="Figura 4 - Abordagem" />
                        <div className="carousel-caption">
                            <h3>Abordagem</h3>
                            <p>Prezamos pelo profissionalismo, o respeito às leis e aos direitos de cada indivíduo</p>
                        </div>
                    </div>
                </div>
                <a className="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
                    <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span className="sr-only">Anterior</span>
                </a>
                <a className="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
                    <span className="carousel-control-next-icon" aria-hidden="true"></span>
                    <span className="sr-only">Próximo</span>
                </a>
            </div>
        );
    }
}

export default Caroussel;