import React from 'react'
import Card from '@material-ui/core/Card';
import CardActions from '@material-ui/core/CardActions';
import CardContent from '@material-ui/core/CardContent';
import Button from '@material-ui/core/Button';

export default function DetailCard() {
  return (
    
     <Card style={{backgroundColor: 'grey'}}>
      <CardContent>
        <h3> Pineapple Fresh </h3>
        <p> rating will be here </p>
        <p> $8.00/kg  </p>
        <p> divider will be here </p>
        <p> status still in farm(fresh)</p>
          <h3>Qty</h3>
          <form className="add-cart">
    
    <Button color="primary">Buy now</Button>
</form>

      </CardContent>
      
    </Card>
    
  )
}
