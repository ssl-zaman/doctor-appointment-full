function InputField({ label, type = 'text', id, name, value, onChange, placeholder, error }) {
    return (
      <div className="w-full">
        <label htmlFor={id} className="block mb-2 text-base font-medium text-gray-900 dark:text-white">
          {label}
        </label>
        <input
          type={type}
          id={id}
          name={name}
          value={value}
          onChange={onChange}
          className={`bg-gray-50 border ${error ? 'border-red-500' : 'border-gray-300'} text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500`}
          placeholder={placeholder}
        />
        {error && <p className="mt-1 text-sm text-red-500">{error}</p>}
      </div>
    );
  }

  export default InputField;
