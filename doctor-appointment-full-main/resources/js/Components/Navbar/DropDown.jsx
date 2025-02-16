import { Squares2X2Icon } from "@heroicons/react/24/outline";
import { ChevronDownIcon} from "@heroicons/react/24/outline";
import { ChevronUpIcon} from "@heroicons/react/24/outline";
import { useState } from "react";

const DropDown = ({name, open, children, Icon}) => {
    const [show, setShow] = useState(open);





  return (
    <div>
        <button onClick={()=> setShow(!show)} className={`${show ? 'bg-slate-700 ' : ''}  w-full p-2 text-white flex justify-between`}>
            <div className="flex gap-2">
                { Icon && <Icon className='size-6'/>}
                <span>{name}</span>
            </div>
            { show ? <ChevronDownIcon className='size-6'/> : <ChevronUpIcon className="size-6" /> }
        </button>

       {show &&  (<div className='text-white ml-10 mb-4'>
            {children}
        </div>)}
    </div>
  )
}

export default DropDown