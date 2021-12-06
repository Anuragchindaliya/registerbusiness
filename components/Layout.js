import React from "react";
import styles from "../styles/Layout.module.scss";
import Header from "./header";

const Layout = ({ children }) => {
  return (
    <>
      <Header />
      <div className={styles.container}>
        <main className={styles.main}>{children}</main>
      </div>
    </>
  );
};

export default Layout;
