import React from "react";

import "./App.css";

function App() {
  const price = 100;
  const [quantity, setQuantity] = React.useState(0);
  function addToCart() {
    setQuantity(quantity + 1);
  }

  return (
    <>
      <div>
        <p>Price: {price}</p>
        <p>Total Price: {quantity * price}</p>
        <button onClick={addToCart}>Total</button>
      </div>
    </>
  );
}

export default App;
