import React from 'react'
import Home from '../../components/home';
import Head from "next/head";
// import style from "../styles/Home.module.scss";
export const getStaticProps = async () => {
    const res = await fetch("http://localhost/listmeon/api/allBusiness.php")
    const data = await res.json();
    return {
        props: { allBusiness: data }
    }
}
const index = ({ allBusiness }) => {

    return (
        <>
            <Head>
                <title>Listmeon | Searchbar</title>
            </Head>
            <Home allBusiness={allBusiness} />
        </>
    )
}

export default index
