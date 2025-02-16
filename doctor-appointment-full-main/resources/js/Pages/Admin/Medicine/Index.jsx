import MainLayout from "@/Layouts/MainLayout"
import { usePage, Link, useForm } from "@inertiajs/react"
import { TrashIcon, PencilSquareIcon } from "@heroicons/react/24/outline";
import { useState } from "react";
import Dose from "@/Components/ModelPage/Dose";


const Index = () => {
    const [addMode, setAddMode] = useState(true);

    const {medicines} = usePage().props;
    const {dose} = usePage().props;
    const {doseTime} = usePage().props;
    const {flash} = usePage().props;


    console.log(dose)
    console.log(doseTime)

    const {data, setData, post, put, delete: deleteMedicine, errors, processing} = useForm({
        id: "",
        name: "",
        company: "",
    });

    function submitMedicine(e) {
        e.preventDefault();

        if (data.id) {
            setAddMode(true)
            put(route('medicine.update', data.id), {
                // method: 'PUT',
                data: data,
            });
        } else {

            post(route('medicine.store'), {
                data: data,
            });
        }

        setData({
            id: '',
            name: '',
            company: '',
        })
    }


    function editMedicine(id, name, company)
    {
        setData({
            id: id,
            name: name,
            company: company
        });
        setAddMode(false)
    }

    function handleDelete(id) {
        if (window.confirm("Are you sure you want to delete this medicine?")) {
            // If user confirms, proceed with the delete
            deleteMedicine(route('medicine.destroy', id));
        }
    }

  return (
    <MainLayout>

        {/* Show Success Message */}
        {flash?.success && (
                <div className="bg-green-500 text-white p-4 rounded-md">
                    {flash.success}
                </div>
        )}


        <div className="flex gap-10">
            {/* left side  */}
            <div className="w-2/3 bg-white p-5">

                <form onSubmit={submitMedicine} className="flex gap-5 py-5 p-2 bg-gray-100 rounded-md shadow-md mb-5">
                    <div className="flex flex-col">
                        <label htmlFor="">Medicine Name</label>
                        <input value={data.name} onChange={(e) => setData('name', e.target.value)} type="text" className="text-sm px-2 py-1 focus:outline-none focus:ring-0 border-slate-500 rounded"/>
                    </div>
                    <div className="flex flex-col">
                        <label htmlFor="">Medicine Company</label>
                        <input value={data.company} onChange={(e) => setData('company', e.target.value)} type="text" className="text-sm px-2 py-1 focus:outline-none focus:ring-0 border-slate-500 rounded"/>
                    </div>

                    <div className="flex flex-col items-end justify-end">

                        <button type="submit" className="bg-blue-400 text-white px-5 py-1 rounded">{ addMode ? 'Add' : 'Update'}</button>
                    </div>

                </form>


                <table className="w-full">
                    <thead>
                        <tr className="border-b py-2">
                            <td>Id</td>
                            <td>Name</td>
                            <td>Company</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                            {medicines?.data?.map((item, index) => (
                                <tr key={index}>
                                    <td>{item.id}</td>
                                    <td>{item.name}</td>
                                    <td>{item.company}</td>
                                    <td className="flex gap-1">
                                        <button onClick={() => editMedicine(item.id, item.name, item.company)} className="text-blue-500">
                                                <PencilSquareIcon className="size-6" />
                                        </button>
                                        <buttton
                                            onClick={() => handleDelete(item.id)}
                                            className="text-red-500 px-2 py-1 cursor-pointer"
                                        >
                                            <TrashIcon className="size-6" />
                                        </buttton>
                                    </td>
                                </tr>
                            ))}
                    </tbody>
                </table>

                <div className="flex justify-center mt-5 space-x-2">
                        {medicines?.links?.map((link, index) => (
                            <Link
                                key={index}
                                href={link.url || "#"}
                                className={`px-3 py-2 border rounded ${
                                    link.active ? "bg-blue-500 text-white" : "bg-gray-200"
                                } ${!link.url ? "pointer-events-none opacity-50" : ""}`}
                            >
                                {link.label.replace("&laquo;", "«").replace("&raquo;", "»")}
                            </Link>
                        ))}
                    </div>
            </div>
            {/* right side  */}
            <div className="w-1/3 bg-white p-5">

                        <Dose data={dose}/>

            </div>
        </div>


    </MainLayout>
  )
}

export default Index
