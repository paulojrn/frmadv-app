import React, { Component } from "react";

class ExpertiseCard extends Component
{
    render()
    {

        let card = this.props.card;
        let cardId = card.id;

        return(
            <div id={cardId} className="card text-center border-secondary">
                <div className="card-header">
                    <ul className="nav nav-tabs card-header-tabs">
                        <li className="nav-item">
                            <a 
                                className="nav-link active"
                                id={`${cardId}-info-tab`}
                                data-toggle="tab"
                                href={`#${cardId}-info`}
                                role="tab"
                                aria-controls={`${cardId}-info`}
                                aria-selected="true">
                                
                                Informações
                            </a>
                        </li>
                        <li className="nav-item">
                            <a
                                className="nav-link"
                                id={`${cardId}-details-tab`}
                                data-toggle="tab"
                                href={`#${cardId}-details`}
                                role="tab"
                                aria-controls={`${cardId}-details`}
                                aria-selected="false">
                                
                                Detalhes
                            </a>
                        </li>
                    </ul>
                </div>
                <div className="tab-content">
                    <div className="tab-pane fade show active" id={`${cardId}-info`} role="tabpanel" aria-labelledby={`${cardId}-info-tab`}>
                        <div className="card-body">
                            <h4 className="card-title">{card.title}</h4>
                            <p className="card-text">{card.text}</p>
                        </div>
                    </div>
                    <div className="tab-pane fade" id={`${cardId}-details`} role="tabpanel" aria-labelledby={`${cardId}-details-tab`}>
                        <div className="card-body">
                            <div>
                                <h4 className="card-title">Sub temas</h4>
                            </div>
                            <div>
                                <ul>
                                    <li><p>teste</p></li>
                                    <li><p>teste</p></li>
                                    <li><p>teste</p></li>
                                </ul>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default ExpertiseCard;