import InputField from '@/Components/Form/InputField';
import MainLayout from '@/Layouts/MainLayout';
import { useForm, Link, router } from '@inertiajs/react';

const Edit = ({ chamber }) => {
    // Initialize form with existing chamber data
    const { data, setData, put, errors, processing } = useForm({
        location: chamber.location || "",
        hospital_name: chamber.hospital_name || "",
        contact_number: chamber.contact_number || "",
        notes: chamber.notes || ""
    });

    // Handle input changes
    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setData(name, type === "checkbox" ? checked : value);
    };

    // Handle form submission
    const handleSubmit = (e) => {
        e.preventDefault();
        put(route('chambers.update', chamber.id)); // Using PUT method for updating
    };

    return (
        <MainLayout>
            <h2 className="text-2xl font-bold">Edit Chamber</h2>
            <div className='p-10 rounded-md bg-white shadow-md'>
                <form onSubmit={handleSubmit} encType="multipart/form-data" className='space-y-4'>
                    <InputField label="Chamber Location" name="location" value={data.location} onChange={handleChange} placeholder="Hospital Location" error={errors.location}/>
                    <InputField label="Hospital Name" name="hospital_name" value={data.hospital_name} onChange={handleChange} placeholder="Hospital Name" error={errors.hospital_name}/>
                    <InputField label="Phone Number" name="contact_number" value={data.contact_number} onChange={handleChange} placeholder="Hospital Number" error={errors.contact_number}/>
                    <InputField label="Notes" name="notes" value={data.notes} onChange={handleChange} placeholder="Any Notes about hospital" error={errors.notes}/>

                    <div className='flex justify-between gap-5'>
                        <button
                            type="submit"
                            className="bg-blue-500 text-white px-5 py-3 rounded"
                            disabled={processing}
                        >
                            {processing ? "Updating..." : "Update Chamber"}
                        </button>
                        <Link href={route('chambers.index')} className='bg-red-500 text-white px-5 py-3 rounded'>
                            Back
                        </Link>
                    </div>
                </form>
            </div>
        </MainLayout>
    );
};

export default Edit;
