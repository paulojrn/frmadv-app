import React, { Component } from "react";
import ContactInfo from "./ContactInfo";
import ContactForm from "./ContactForm";

class Contact extends Component
{
    render()
    {

        let contact = this.props.contact;

        return(
            <section id={contact.id}>
                <h4 className="section-title my-5 font-weight-bold">Contato</h4>

                <hr className="mb-5 d-none" />

                <ContactInfo contact={contact} />

                <div className="pt-3 row">
                    <div id={`${contact.id}-form-column`} className="col-lg-5 col-md-12">
                        <ContactForm contact={contact} />
                    </div>

                    <div id={`${contact.id}-map-column`} className="col-lg-7 col-md-12">
                        

                        <div dangerouslySetInnerHTML={{
                             __html: `  <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.962801037071!2d-48.622607885429154!3d-27.56366492730385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95274998cf5672a3%3A0x73a80830068c9da7!2sR.%20Jo%C3%A3o%20Sandim%2C%20643%20-%20Ipiranga%2C%20S%C3%A3o%20Jos%C3%A9%20-%20SC%2C%2088111-350!5e0!3m2!1spt-BR!2sbr!4v1617688971806!5m2!1spt-BR!2sbr"
                                            width="100%"
                                            height="400"
                                            style="border:0;"
                                            loading="lazy">
                                        </iframe>`
                            }}
                        />;
                    </div>
                </div>
            </section>
        );
    }
}

export default Contact;