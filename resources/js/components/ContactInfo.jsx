import React, { Component } from "react";

class ContactInfo extends Component
{
    render()
    {

        let contact = this.props.contact;

        return(
            <div id={`${contact.id}-info-column`} className="row">
                <div className="info col-lg-3 col-md-3 mb-3 text-left">
                    <i className="bi bi-building mr-2"></i>
                    <p>{contact.info.weekOfficePeriod}</p>
                </div>
                
                <div className="info col-lg-3 col-md-3 mb-3 text-center">
                    <i className="bi bi-clock mr-2"></i>
                    <p>{contact.info.hourOfficePeriod}</p>
                </div>
                
                <div className="info col-lg-3 col-md-3 mb-3 text-center">
                    <i className="bi bi-envelope mr-2"></i>
                    <p>{contact.info.email}</p>
                </div>
                
                <div className="info col-lg-3 col-md-3 mb-3 text-right">
                    <i className="bi bi-whatsapp mr-2"></i>
                    <p>{contact.info.phone}</p>
                </div>
            </div>
        );
    }
}

export default ContactInfo;