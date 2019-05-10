import React from 'react';
import NavBar from '../components/header';

export default function Checkout() {
  return (
    <div>
      <NavBar />

      <h2> List of products added to cart </h2>

      <button type="submit">remove item from cart</button>
    </div>
  );
}
