import { Component } from "react";

class ContactForm extends Component
{
    render()
    {

        let contact = this.props.contact;

        return(
            <form>
                <div className="form-item">
                    <label htmlFor={`${contact.id}-name`}><i className="bi bi-person"></i> Nome</label>
                    <input type="text" id={`${contact.id}-name`} className="form-control form-control-sm" />
                </div>
                <div className="form-item">
                    <label htmlFor={`${contact.id}-email`}><i className="bi bi-envelope"></i> E-mail</label>
                    <input type="text" id={`${contact.id}-email`} className="form-control form-control-sm" />
                </div>
                <div className="form-item">
                    <label htmlFor={`${contact.id}-title`}><i className="bi bi-tag"></i> Título</label>
                    <input type="text" id={`${contact.id}-title`} className="form-control form-control-sm" />
                </div>
                <div className="form-item">
                    <label htmlFor={`${contact.id}-message`}><i className="bi bi-pencil"></i> Mensagem</label>
                    <textarea type="text" id={`${contact.id}-message`} className="form-control form-control-sm" rows="4"></textarea>
                </div>
                <div className="text-center my-5">
                    <button className="btn btn-primary">Enviar</button>
                </div>
            </form>
        );
    }
}

export default ContactForm;