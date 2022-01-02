import React, { Component } from "react";
import ExpertiseCard from "./ExpertiseCard";

class ExpertiseCardList extends Component
{
    render()
    {
        return(
            <section id="expertise-area" className="expertise text-center">
                <h4 className="section-title my-5 font-weight-bold">Áreas de atuação</h4>

                <div className="row justify-content-center">

                    {
                        this.props.cardList.map((card) => {
                            return (
                                <div key={`${card.id}-div`} className="card-deck col-sm-12 col-md-6 col-lg-4">
                                    <ExpertiseCard key={card.id} card={card} />
                                </div>                            
                            );
                        })
                    }

                </div>
                
            </section>
        );
    }
}

export default ExpertiseCardList;