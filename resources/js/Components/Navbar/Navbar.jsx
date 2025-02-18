import { Link } from '@inertiajs/react'
import { BeakerIcon } from '@heroicons/react/24/solid'
import { Squares2X2Icon, Cog6ToothIcon } from "@heroicons/react/24/outline";
import { CubeIcon } from "@heroicons/react/24/outline";
import { ChevronDownIcon} from "@heroicons/react/24/outline";
import DropDown from './DropDown';

const Navbar = () => {
  return (
    <div className="w-[300px] bg-slate-900 h-screen p-5 sticky top-0">

                <Link href="/dashboard" className="text-bold text-3xl text-center text-white mb-10">TailAdmin</Link>
                <nav className='w-full flex flex-col gap-3'>

                    <h1 className='text-white opacity-80 text-xl mb-3'>MENU</h1>

                    <DropDown name={'Dashboard'} open={false} Icon={Squares2X2Icon}>
                        <div className='mt-4 flex flex-col gap-2'>
                            <Link href={route('medicine.index')} className='text-white opacity-50'>Medicine </Link>
                            <Link href={route('dose.index')} className='text-white opacity-50'>Dose </Link>
                            <Link href={route('dosetime.index')} className='text-white opacity-50'>Dose Time </Link>

                        </div>
                    </DropDown>

                    <DropDown name={'Doctor'} open={false} Icon={CubeIcon}>
                        <div className='mt-4 flex flex-col gap-2'>
                            <Link href={route('chambers.index')} className='text-white opacity-50'>Chamber</Link>

                        </div>
                    </DropDown>

                    <DropDown name={'Features'} open={false} Icon={CubeIcon}>
                        <div className='mt-4 flex flex-col gap-2'>
                            <Link href={route('slider.index')} className='text-white opacity-50'>Slider</Link>
                            <Link href={route('services.index')} className='text-white opacity-50'>Services</Link>
                            <Link href={route('solutions.index')} className='text-white opacity-50'>Solutions</Link>
                            {/* <Link className='text-white opacity-50'>About </Link>
                            <Link className='text-white opacity-50'>About </Link> */}
                        </div>
                    </DropDown>

                    <DropDown name={'Settings'} open={false} Icon={Cog6ToothIcon}>
                        <div className='mt-4 flex flex-col gap-2'>
                            <Link href={route('company.index')} className='text-white opacity-50'>Company Settings </Link>
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
