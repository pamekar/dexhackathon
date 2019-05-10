import React, { Component } from 'react'
import NavBar from '../components/header';
import Grid from '@material-ui/core/Grid';
import ListGrid from '../components/listGrid/list-grid';
import Footer from '../components/footer/footer';

export default class List extends Component {
  render() {
    return (
      <div>
        <NavBar />
        <Grid container>
        <Grid item xs={3}>
          <h3>Search will be here</h3>
        </Grid>
        <Grid item xs={9}>
        <h2> Nigerian trips and activities </h2>
        <Grid container>
         <Grid item xs={6}>
        <p>100 tours and activities </p>
        </Grid>

        <Grid item xs={6}>
        <p>sorting will be here</p>
        </Grid>
        <ListGrid/>
        </Grid>
        </Grid>
        </Grid>


       <Footer />
      </div>
    )
  }
}
