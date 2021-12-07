import React from 'react'
import Image from "next/image";
import Link from 'next/dist/client/link';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faPhone, faDirections, faShareAlt } from '@fortawesome/free-solid-svg-icons';
import { faWhatsapp } from '@fortawesome/free-brands-svg-icons';


const BusinessCards = ({ allBusiness }) => {

    return (
        <>
            <div className="container-fluid bg-trasparent my-4 p-3" style={{ position: 'relative' }}>
                <div className="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3" id="businessCards">
                    {allBusiness.map((el, i) => (<div key={i}><div className="col">
                        <div className="card h-100 shadow-sm">
                            <Image src="/images/web2rise.png" className="card-img-top" alt="..." width={100} height={200} />
                            <div className="card-body">
                                <div className="clearfix">
                                    <h4 className="float-start ">{el.firm_name}</h4>
                                    <span className="float-end price-hp" />
                                </div>
                                <i className="card-title">
                                    {el.subhead}
                                </i>
                                <div className="mt-3 text-center">
                                    <a href={`tel:${el.number}`} className="m-2 border p-2 rounded-circle border-primary">

                                        <FontAwesomeIcon icon={faPhone} className="fa-flip-horizontal" />
                                    </a>
                                    <a href=" " className=" m-2 border p-2 rounded-circle border-primary">
                                        <FontAwesomeIcon icon={faDirections} />
                                    </a>
                                    <a href="https://wa.me/918010334416" target="_blank" rel="noopener noreferrer" className="m-2 border p-2 rounded-circle border-primary">

                                        <FontAwesomeIcon icon={faWhatsapp} />
                                    </a>
                                    <a href="whatsapp://send?text=listmeon.com my link ...///" className="m-2 border p-2 rounded-circle border-primary">

                                        <FontAwesomeIcon icon={faShareAlt} />
                                    </a>
                                </div>
                                <div className="text-center my-4">
                                    <Link href={`/page/${el.slug}`} >
                                        <a className="btn btn-warning">Check offer</a>
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div></div>))}
                </div>
            </div>
        </>
    )
}

export default BusinessCards;


