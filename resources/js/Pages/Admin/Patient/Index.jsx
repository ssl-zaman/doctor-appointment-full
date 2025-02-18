import MainLayout from "@/Layouts/MainLayout"
import { usePage, Link, useForm } from "@inertiajs/react"
import { TrashIcon, PencilSquareIcon } from "@heroicons/react/24/outline";
import { useState } from "react";



const Index = ({patients}) => {



  return (
    <MainLayout>




        <div className="flex gap-10">
            {/* left side  */}
            <div className="w-full bg-white p-5">
                <h2 className="text-2xl font-bold mb-5">Patient List</h2>




                <table className="w-full">
                    <thead>
                        <tr className="border-b py-2">
                            <td>Id</td>
                            <td>Name</td>
                            <td>Phone</td>
                            <td>Appointment Date</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                            {patients?.map((item, index) => (
                                <tr key={index} className="border-b border-gray-300">
                                    <td>{index + 1}</td>
                                    <td>{item.name}</td>
                                    <td>{item.number}</td>
                                    <td>{formatDate(item.appointment_date)}</td>

                                    <td className="flex gap-1">
                                        <button  className="text-blue-500">
                                                <PencilSquareIcon className="size-6" />
                                        </button>
                                        <buttton

                                            className="text-red-500 px-2 py-1 cursor-pointer"
                                        >
                                            <TrashIcon className="size-6" />
                                        </buttton>
                                    </td>
                                </tr>
                            ))}
                    </tbody>
                </table>


            </div>

        </div>


    </MainLayout>
  )
}

const formatDate = (dateString) => {
    const date = new Date(dateString);
    return date.toLocaleDateString("en-GB", {
        day: "2-digit",
        month: "short",
        year: "numeric",
    });
}

export default Index
