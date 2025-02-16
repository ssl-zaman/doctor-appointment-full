import { TrashIcon, PencilSquareIcon } from "@heroicons/react/24/outline";
import { Inertia } from "@inertiajs/inertia";
import { useState } from "react";

const Dose = ({ data }) => {
  const [dose, setDose] = useState(data);

  const handelDelete = (id) => {
    Inertia.delete(route('dose.destroy', id), {
      onSuccess: () => {
        console.log("working success");
        const updatedData = dose.filter((item) => item.id !== id);
        setDose(updatedData);
      },
      onError: (error) => {
        console.error(error);
        // Handle error case here if needed
      },
    });
  };

  return (
    <>
      <div>
        <table className="w-full">
          <thead>
            <tr>
              <th>ID</th>
              <th>Dose</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            {dose.map((item, index) => (
              <tr key={index} className="text-center">
                <td>{item.id}</td>
                <td>{item.name}</td>
                <td className="flex gap-1">
                  <button className="text-blue-500">
                    <PencilSquareIcon className="size-6" />
                  </button>
                  <button
                    onClick={() => handelDelete(item.id)}
                    className="text-red-500 px-2 py-1 cursor-pointer"
                  >
                    <TrashIcon className="size-6" />
                  </button>
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </>
  );
};

export default Dose;
