import { Link } from '@inertiajs/react'
import { BeakerIcon } from '@heroicons/react/24/solid'
import { Squares2X2Icon } from "@heroicons/react/24/outline";
import { CubeIcon } from "@heroicons/react/24/outline";
import { ChevronDownIcon} from "@heroicons/react/24/outline";
import DropDown from './DropDown';

const Navbar = () => {
  return (
    <div className="w-[300px] bg-slate-900 h-screen p-5">
            <Link href="/dashboard" className="text-bold text-3xl text-center text-white mb-10">TailAdmin</Link>
            <nav className='w-full flex flex-col gap-3'>

                <h1 className='text-white opacity-80 text-xl mb-3'>MENU</h1>

                <DropDown name={'Dashboard'} open={false} Icon={Squares2X2Icon}>
                    <div className='mt-4 flex flex-col gap-2'>
                        <Link href={route('medicine.index')} className='text-white opacity-50'>Medicine </Link>
                        <Link className='text-white opacity-50'>About </Link>
                        <Link className='text-white opacity-50'>About </Link>
                        <Link className='text-white opacity-50'>About </Link>
                    </div>
                </DropDown>

                <DropDown name={'Ecommerce'} open={false} Icon={CubeIcon}>
                    <div className='mt-4 flex flex-col gap-2'>
                        <Link className='text-white opacity-50'>About </Link>
                        <Link className='text-white opacity-50'>About </Link>
                        <Link className='text-white opacity-50'>About </Link>
                        <Link className='text-white opacity-50'>About </Link>
                    </div>
                </DropDown>
            </nav>
    </div>
  )
}

export default Navbar
