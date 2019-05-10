import React, { Component } from 'react'
import NavBar from '../components/header';
import Paris from '../paris.jpg';
import './pages.css'
import Footer from '../components/footer/footer';
import Card from '@material-ui/core/Card';
import CardContent from '@material-ui/core/CardContent';
import Button from '@material-ui/core/Button';
import Divider from '@material-ui/core/Divider';
import { withStyles } from '@material-ui/core/styles';
import InputLabel from '@material-ui/core/InputLabel';
import MenuItem from '@material-ui/core/MenuItem';
import FormControl from '@material-ui/core/FormControl';
import Select from '@material-ui/core/Select';
import InputBase from '@material-ui/core/InputBase';
import Packages from '../components/packages/packages';
import StayUpdated from '../components/newsLetter/stayUpdated';

const BootstrapInput = withStyles(theme => ({
  root: {
    'label + &': {
      marginTop: theme.spacing.unit * 3,
    },
  },
  
  input: {
    borderRadius: 4,
    position: 'relative',
    backgroundColor: theme.palette.background.paper,
    border: '1px solid #ced4da',
    fontSize: 16,
    width: 'auto',
    padding: '10px 26px 10px 12px',
    transition: theme.transitions.create(['border-color', 'box-shadow']),
    // Use the system font instead of the default Roboto font.
    fontFamily: [
      '-apple-system',
      'BlinkMacSystemFont',
      '"Segoe UI"',
      'Roboto',
      '"Helvetica Neue"',
      'Arial',
      'sans-serif',
      '"Apple Color Emoji"',
      '"Segoe UI Emoji"',
      '"Segoe UI Symbol"',
    ].join(','),
    '&:focus': {
      borderRadius: 4,
      borderColor: '#80bdff',
      boxShadow: '0 0 0 0.2rem rgba(0,123,255,.25)',
    },
  },
}))(InputBase);

const styles = theme => ({
  root: {
    display: 'flex',
    flexWrap: 'wrap',
  },
  margin: {
    margin: theme.spacing.unit,
  },
  bootstrapFormLabel: {
    fontSize: 18,
  },
});

class Product extends Component {
  state = {
    quantity: '',
  };

  handleChange = event => {
    this.setState({ quantity: event.target.value });
  };
  render() {
    const { classes } = this.props;
    return (
      <div>
          <NavBar />
        
        <div className="product-container">
        <div className="double-grid">
        
        <img src={Paris} style={{width: 700, height: 500}} />
        </div>

        <div className="double-grid">
        
        <Card className="product-card">
      <CardContent>
        <h4> Pineapple Fresh </h4>
        <p> rating will be here </p>
        <p> $8.00/kg  </p>
        <Divider />
        <p> Status </p>
        <p>still in farm(fresh)</p>
        <Divider />
        <div className="quantity-container">
        <div className="double-grid">
          <h3>Qty</h3>
          </div>
          <div className="double-grid">
          <FormControl className={classes.margin}>
         
          <Select
            value={this.state.quantity}
            onChange={this.handleChange}
            input={<BootstrapInput name="age" id="age-customized-select" />}
          >
            
            <MenuItem value={1}>1</MenuItem>
            <MenuItem value={2}>2</MenuItem>
            <MenuItem value={3}>3</MenuItem>
            <MenuItem value={4}>4</MenuItem>
          </Select>
        </FormControl>
        </div>
        </div>
          <form className="add-cart">
    
          <Button variant="contained" color="primary" className="buy-btn">
        Buy now
      </Button>
</form>
</CardContent>

    </Card>
    
        </div>
        </div>
        <div className="products-line"></div>
        
       <Packages />

       <div className="products-line"></div>
        
        <StayUpdated />
        <Footer />
      </div>
    )
  }
}
export default withStyles(styles)( Product)