import { MagnifyingGlassIcon } from "@heroicons/react/24/outline";
import { BellIcon } from "@heroicons/react/24/outline";
import { ChatBubbleLeftEllipsisIcon } from "@heroicons/react/24/outline";
import { ChevronDownIcon} from "@heroicons/react/24/outline";
import { ChevronUpIcon} from "@heroicons/react/24/outline";
import { UserIcon} from "@heroicons/react/24/outline";
import { useState } from "react";


const Topbar = () => {

    const [showUserProfile, setShowUserProfile] = useState(false);

  return (
    <div className="px-10 py-5 border-b w-full flex justify-between items-center">
        <div>
            <form action="">
                <div className="flex gap-2 items-center">
                    <MagnifyingGlassIcon className="size-5 text-slate-500"/>
                    <input type="text"  className="text-slate-500 border-none outline-none focus:ring-0 focus:border-transparent" placeholder="Search to type"/>
                </div>
            </form>
        </div>
        <div className="flex gap-4">
            <div>
                <button className="bg-slate-200 p-2 rounded-full">
                    <BellIcon className="size-6" />
                </button>
            </div>

            <div>
                <button className="bg-slate-200 p-2 rounded-full">
                    <ChatBubbleLeftEllipsisIcon className="size-6" />
                </button>
            </div>

            <div className="flex items-center gap-2 px-3 relative" onClick={()=> setShowUserProfile(!showUserProfile)}>
                <div className="">
                    <h2 className="text-slate-800 text-right font-semibold">Mr Jone</h2>
                    <div className="text-sm text-slate-500 text-right">Doctor</div>
                </div>
                <div>
                    <img className="rounded-full" src="https://placehold.co/50x50" alt="" />
                </div>
                {showUserProfile ?  <ChevronUpIcon className="size-6" /> : <ChevronDownIcon className="size-6"/>  }

                { showUserProfile && (
                    <div className="absolute right-0 top-full mt-6 w-64 bg-white  p-5 shadow-lg space-y-3">
                        
                        <div className="flex items-center gap-2 text-slate-600">
                            <UserIcon className="size-6"/>
                            <span className="text-sm">My Profile</span>
                        </div>
                        <div className="flex items-center gap-2 text-slate-600">
                            <UserIcon className="size-6"/>
                            <span className="text-sm">My Profile</span>
                        </div>
                        <div className="flex items-center gap-2 text-slate-600">
                            <UserIcon className="size-6"/>
                            <span className="text-sm">My Profile</span>
                        </div>

                        <div className="flex items-center gap-2 border-t pt-2 text-slate-600">
                            <UserIcon className="size-6"/>
                            <span className="text-sm">My Profile</span>
                        </div>
                        
                    </div>
                )}
            </div>
        </div>
    </div>
  )
}

export default Topbar