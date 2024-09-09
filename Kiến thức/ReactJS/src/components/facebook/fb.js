export default function FB() {
  const styleInput = {
    padding: "10px 7px",
    outline: "none",
  };

  const styleButton = {
    padding: "10px 7px",
    color: "white",
    border: "none",
    outline: "none",
  };


  return (
    <div className="mod-fb w-900 min-h-500 flex flex-x-y gap-20 px-20">
      <div className="title mb-40">
        <h1 className="fs-60" style={{color: "#0866ff"}}>facebook</h1>
        <p className="fs-28 w-500">
          Facebook helps you connect and share with the people in your life.
        </p>
      </div>

      <form className="form flex flex-col p-10 w-400 bg-white rounder-10">
         <input type="text" class="mb-10" style={styleInput} placeholder="Email address or phone number"></input>
         <input type="password" style={styleInput} placeholder="Password"></input>

         <button
          class="btn-login my-15"
          style={{...styleButton, background: "#0866ff"}}
         >
            Login
          </button>

        <a className="fs-14 text-center"
          href="#"
          style={{color: "#0866ff"}}
        >
          Forgotten password ?
        </a>

        <hr className="my-20"></hr>

         <button class="btn-login w-200 mb-10"
          style={{...styleButton, backgroundColor: "#42b72a", alignSelf: "center"}}
          >
          Create new account
          </button>
      </form>
    </div>
  );
}