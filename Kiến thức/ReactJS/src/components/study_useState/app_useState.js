import { useState } from "react";

export default function AppUseState() {
  const [count, setCount] = useState(0);

  return (
    <div className="frame-count">
     <p>Số đếm: {count}</p>

     <button
        className="p-10 border-none outline-none cursor-pointer mt-10"
        onClick={() => setCount((count) => count + 1)}
      >
        Increment
      </button>
      
      <br></br>

      <button
        className="p-10 border-none outline-none cursor-pointer mt-10"
        onClick={() => setCount(0)}
      >
        Reset
      </button>
    </div>
  );
}