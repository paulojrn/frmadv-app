import React, { Component } from "react";
import Navbar from "./Navbar";
import Caroussel from "./Caroussel";
import ExpertiseCardList from "./ExpertiseCardList";
import Contact from "./Contact";
import SocialNetworks from "./SocialNetworks";

class App extends Component
{

    constructor(props)
    {
        super(props);

        this.cardList = [
            {
                id: "card-civel",
                title: "Cível",
                text: "Conjunto de normas jurídicas responsáveis por regular os direitos e obrigações de ordem privada em relação as pessoas, seus bens e suas relações."
            },
            {
                id: "card-trabalho",
                title: "Trabalho",
                text: "Conjunto de princípios, regras e instituições referente à relação de trabalho subordinado e situações análogas, visando assegurar melhores condições de trabalho e sociais ao trabalhador."
            },
            {
                id: "card-criminal",
                title: "Criminal",
                text: "Conjunto de regras e normas para regular condutas humanas consideradas indesejadas, possuidoras de certa gravidade e reprovação social, e capazes de colocar em risco a convivência em sociedade."
            },
            {
                id: "card-previdencia",
                title: "Previdência",
                text: "Regula as relações entre empresas e empregados com os órgãos da previdência social ou privada definindo regras a respeito das contribuições sociais e concessão de benefícios previdenciários, como aposentadoria, auxílio-doença e pensão."
            },
            {
                id: "card-consumidor",
                title: "Consumidor",
                text: "Garante que uma pessoa que comprou um produto ou serviço em uma loja tenha os seus direitos respeitados, principalmente quando se refere a ser informado e protegido contra abusos."
            },
            {
                id: "card-familia",
                title: "Família",
                text: "Trata das relações familiares e das obrigações e direitos decorrentes dessas relações, tem como conteúdo os estudos do casamento, união estável, relações de parentesco, filiação, alimentos, bem de família, tutela, curatela e guarda."
            }
        ];

        this.contact = {
            id: "contact",
            info: {
                weekOfficePeriod: "Segunda à sexta",
                hourOfficePeriod: "08:00 - 22:00",
                email: "adv-fran@email.com",
                phone: "(48) 99999-9999"
            }
        };
    }

    render()
    {
        return(
            <React.Fragment>
                <header>
                    <Navbar />
                    <Caroussel />
                </header>
                <main>
                    <div className="container">
                        <ExpertiseCardList cardList={this.cardList} />
                        <Contact contact={this.contact}/>
                    </div>
                </main>
                <footer>
                    <SocialNetworks />
                </footer>
            </React.Fragment>
            
        );
    }
}

export default App;