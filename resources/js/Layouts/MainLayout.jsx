import { usePage } from "@inertiajs/react";

import Navbar from "@/Components/Navbar/Navbar"
import Topbar from "@/Components/Topbar/Topbar"
import FlashMessage from "@/Components/FlashMessages/FlashMessage";



const MainLayout = ({children}) => {
    const {flash} = usePage().props;

    console.log('------ start ---')
    console.log(flash);
    console.log('-------end------');
  return (
    <>
        <div className="w-full flex">
            {/* navbar */}
            <Navbar />
            {/* main cotent  */}
            <div className="flex-1 flex flex-col ">
                {/* header top bar  */}
                <Topbar />
                {/* main cotent */}
                <div className="bg-[#F1F5F9] w-full flex-1 p-10">

                    {/* Show Success Message */}
                    {flash && (
                           <FlashMessage message={flash}/>
                    )}

                    {/* <h2>Message for </h2> */}


                    {children}
                </div>
            </div>
        </div>
    </>
  )
}

export default MainLayout
