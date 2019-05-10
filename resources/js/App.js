import React, { Component } from 'react';
import {BrowserRouter, Route, Switch} from 'react-router-dom';
import Home from './pages/home';
import List from './pages/list';
import Product from './pages/product';
import SignIn from './components/signIn/signIn';
import SignUp from './components/signup/signUp';
import Dashboard from './components/dashboard/Dashboard';
import Checkout from './components/checkout/Checkout';


import {Provider} from './context';

class App extends Component {
  render() {
    return (
      <Provider>
  
        <BrowserRouter>
        <div>
        
         <Switch>
       <Route exact path="/" component={Home}/>
       <Route exact path="/login" component={SignIn}/>
       <Route exact path="/signup" component={SignUp}/>
       <Route exact path="/storedetails" component={Dashboard}/>
       <Route exact path="/searchlist" component={List}/>
       <Route exact path="/product" component={Product} />
       <Route exact path="/checkout" component={Checkout} />
       
       
       
        
       </Switch>
        
        
        </div>
      </BrowserRouter>
      </Provider>
     
    );
  }
}

export default App;
