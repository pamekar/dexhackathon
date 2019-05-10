import React from 'react';
import './banner.css';
import SearchBar from '../searchbar/searchbar'
import Grid from '@material-ui/core/Grid';

export default function Banner() {
  return (
   
    <Grid className="banner" container>
    <Grid item xs={12} sm={12}>
    <h1>Shop for fresh items</h1>
    <SearchBar/>

   </Grid>
      
    </Grid>
  )
}

